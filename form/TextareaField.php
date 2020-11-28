<?php


namespace edj\mvcframecore\form;


class TextareaField extends BaseField
{
    public function renderInput(): string
    {
        // TODO: Implement renderInput() method.
       return sprintf('<textarea  name="%s"  class="form-control%s">%s</textarea>'
           ,
           $this->attribute,
           $this->model->hasError($this->attribute) ? '  is-invalid' : '',
           $this->model->{$this->attribute},

       );
    }
}