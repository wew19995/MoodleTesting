<?php

class __Mustache_1c666273aca788fca0e35cf0b41ea54d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="card dashboard-card border-0">
';
        $buffer .= $indent . '    <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="card-body pr-1 course-info-container">
';
        $buffer .= $indent . '        <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
