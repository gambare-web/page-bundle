<?php

namespace Gambare\PageBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Gambare\PageBundle\Model\PageBase;

class PageBaseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PageBase::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $panelData = FormField::addPanel('Parameters', 'fas fa-cog');
        $name      = TextField::new('name')->setHelp("Name of the page for internal reference");
        $title     = TextareaField::new('title');
        $slug      = TextField::new('slug', 'URL')->setHelp("Must be unique. Auto generated using the title if empty");
        $enabled   = BooleanField::new('enabled', 'Activate');

        // Traits PageMeta (SEO)
        $panelMeta = FormField::addPanel('Meta', 'fas fa-code');
        $metaTitle = TextField::new('metaTitle');
        $metaDescription = TextField::new('metaDescription')->setHelp("https://moz.com/learn/seo/meta-description");
        $metaKeywords = TextField::new('metaKeywords');
        $author = TextField::new('author');
        $robot = TextField::new('robot')->setHelp(
            "ex: index,follow  | noindex,nofollow  - https://moz.com/learn/seo/robots-meta-directives"
        );

        // Traits PageBasicAnalytics
        $panelAnalytics = FormField::addPanel('Analytics', 'fas fa-bar-chart');
        $analytics      = TextareaField::new('analytics', 'Header Script')->setHelp("Put here script code to be displayed in the header");
        $analyticsFooter      = TextareaField::new('analyticsFooter', 'Footer script')->setHelp("Put here script code to be displayed in the footer, like Google Analytics tracker code");
        $nbviews        = IntegerField::new('nbviews', 'Views');

        // Traits Timestampable
        $panelTime = FormField::addPanel('Time', 'fas fa-clock');
        $createdAt = DateTimeField::new('createdAt');
        $updatedAt = DateTimeField::new('updatedAt');

        $id = IntegerField::new('id', 'ID');

        $new = [
            $panelData,
            $name,
            $title,
            $slug,
            $enabled,

            $panelMeta,
            $metaTitle,
            $metaDescription,
            $metaKeywords,
            $author,
            $robot,

            $panelAnalytics,
            $analytics,
            $analyticsFooter,
            $nbviews,
        ];

        if (Crud::PAGE_INDEX === $pageName) {
            return [$slug, $name, $nbviews, $enabled];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [
                $id,
                $name,
                $title,
                $slug,
                $enabled,
                $metaTitle,
                $metaDescription,
                $metaKeywords,
                $author,
                $robot,
                $analytics,
                $analyticsFooter,
                $nbviews,
                $createdAt,
                $updatedAt,
            ];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return $new;
        } elseif (Crud::PAGE_EDIT === $pageName) {
            array_push($new, $panelTime, $createdAt, $updatedAt);

            return $new;
        }

        return [];
    }
}