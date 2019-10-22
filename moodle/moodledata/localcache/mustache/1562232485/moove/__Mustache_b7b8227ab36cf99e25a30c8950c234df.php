<?php

class __Mustache_b7b8227ab36cf99e25a30c8950c234df extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="m-t-2 m-b-1">
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'blockD2b6aeb707eecbf00256429eaa044640'),
                'column2' => array($this, 'block558d5a320fc9fb1695e4703700998b1b'),
                'column3' => array($this, 'block943e180268f3811d87f6d0e11c3a50bf'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section81a9c046dc686ed324f2f0582658657e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/right_to_left, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/right_to_left, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc8e72a396b5c5289ae1751dcf15379e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}} e/right_to_left, core {{/pix}}{{> core/action_link }}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section81a9c046dc686ed324f2f0582658657e($context, $indent, $value);
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC17c766c24ee50be90d586b6aa1b6733(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/left_to_right, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/left_to_right, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d827834aa4647d597205045d6825ef3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_link }}{{#pix}} e/left_to_right, core {{/pix}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context);
                }
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionC17c766c24ee50be90d586b6aa1b6733($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockD2b6aeb707eecbf00256429eaa044640($context)
    {
        $indent = $buffer = '';
        $buffer .= '    <div class="pull-left">
';
        $buffer .= $indent . '        ';
        // 'prevlink' section
        $value = $context->find('prevlink');
        $buffer .= $this->sectionBc8e72a396b5c5289ae1751dcf15379e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
    
        return $buffer;
    }

    public function block558d5a320fc9fb1695e4703700998b1b($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '    <div class="mdl-align">
';
        $buffer .= $indent . '        ';
        // 'activitylist' section
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
    
        return $buffer;
    }

    public function block943e180268f3811d87f6d0e11c3a50bf($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '    <div class="pull-right">
';
        $buffer .= $indent . '        ';
        // 'nextlink' section
        $value = $context->find('nextlink');
        $buffer .= $this->section5d827834aa4647d597205045d6825ef3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
    
        return $buffer;
    }
}
