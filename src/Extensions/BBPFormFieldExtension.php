<?php

namespace BiffBangPow\SilverstripeBootstrap5Forms\Extensions;

use SilverStripe\Admin\AdminRootController;
use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FileField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\LabelField;
use SilverStripe\Forms\ListboxField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use BiffBangPow\SilverstripeBootstrap5Forms\Bootstrap5Forms;

class BBPFormFieldExtension extends Extension
{
    public function onBeforeRender($form_field)
    {
        if ($this->isAdminURL()) {
            return;
        }

        $checkboxField = CheckboxField::class;
        $textField = TextField::class;
        $dropdownField = DropdownField::class;
        $listboxField = ListboxField::class;
        $textareaField = TextareaField::class;
        $fileField = FileField::class;
        $labelField = LabelField::class;
        $headerField = HeaderField::class;
        $formAction = FormAction::class;

        if ($form_field instanceof $checkboxField) {
            $form_field->addExtraClass('form-check-input');
        } elseif (
            $form_field instanceof $textField ||
            $form_field instanceof $textareaField ||
            $form_field instanceof $fileField
        ) {
            $form_field->addExtraClass('form-control');
        } elseif (
            $form_field instanceof $labelField ||
            $form_field instanceof $headerField
        ) {
            $form_field->addExtraClass('mb-4');
        } elseif (
            $form_field instanceof $dropdownField ||
            $form_field instanceof $listboxField
        ) {
            $form_field->addExtraClass('form-select');
        } elseif ($form_field instanceof $formAction) {
            if ($form_field->getAttribute('type') == 'submit') {
                // todo make configurable
                $form_field->addExtraClass(Bootstrap5Forms::config()->get('submit_button_class'));
            } else {
                // todo make configurable
                $form_field->addExtraClass(Bootstrap5Forms::config()->get('non_submit_button_class'));
            }
        }
    }

    public function isAdminURL()
    {
        $req = Controller::curr()->getRequest()->getURL();
        $adminPath = AdminRootController::admin_url();
        $currentPath = rtrim($req, '/') . '/';
        if (substr($currentPath, 0, strlen($adminPath)) === $adminPath) {
            return true;
        }
        return false;
    }

    public function getHolderClass() {
        if ($this->getFloatingLabels()) {
            return Bootstrap5Forms::config()->get('floating_labels_class');
        }
    }

    /**
     * @return boolean
     */
    public function getFloatingLabels() {
        return Bootstrap5Forms::config()->get('enable_floating_labels');
    }

}
