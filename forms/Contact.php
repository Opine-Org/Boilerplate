<?php
namespace Form;

class Contact {
    public $collection = 'Collection\ContactRequests';
    public $after = 'notice';
    public $notice = 'Thank you, your request has been received.';

    function firstnameField() {
        return [
            'name'              => 'first_name',
            'placeholder'       => 'First Name',
            'display'           => 'Field\InputText',
            'required'          => true
        ];
    }

    function lastnameField() {
        return [
            'name'              => 'last_name',
            'placeholder'       => 'Last Name',
            'display'           => 'Field\InputText',
            'required'          => true
        ];
    }

    function phoneField() {
        return [
            'name'              => 'phone',
            'placeholder'       => 'Phone',
            'display'           => 'Field\InputText',
            'required'          => true
        ];
    }
    
    function emailField() {
        return [
            'name'              => 'email',
            'placeholder'       => 'Email Address',
            'display'           => 'Field\InputText',
            'required'          => true
        ];
    }

    function messageField() {
        return [
            'name'              => 'message',
            'placeholder'       => 'Enter your message here',
            'display'           => 'Field\Textarea',
            'required'          => true
        ];
    }
}