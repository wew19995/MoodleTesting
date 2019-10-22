<?php

class __Mustache_7473dc00a3b85ee41fb054e8a8715102 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_moove/inc_start')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" class="container-fluid">
';
        $buffer .= $indent . '        <div id="page-header" class="frontpage-guest-header">
';
        $buffer .= $indent . '
';
        // 'sliderenabled' section
        $value = $context->find('sliderenabled');
        $buffer .= $this->sectionA85cff20c589daacbd5652cdd0f09653($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'sliderenabled' inverted section
        $value = $context->find('sliderenabled');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="row" id="loginbox">
';
            $buffer .= $indent . '                    <div class="col-sm-12 col-md-7 hidden-sm-down" id="intro">
';
            // 'bannerheading' section
            $value = $context->find('bannerheading');
            $buffer .= $this->section5f80f96f7e77967629d7665bd41b07d4($context, $indent, $value);
            // 'bannercontent' section
            $value = $context->find('bannercontent');
            $buffer .= $this->sectionCec9e809619afdab84ddbed6f18481a4($context, $indent, $value);
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                    <div class="col-12 col-sm-12 col-md-5 card d-none d-lg-block" id="boxForm">
';
            if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                $buffer .= $partial->renderInternal($context, $indent . '                        ');
            }
            $buffer .= $indent . '                    </div><!-- end of .card-body -->
';
            $buffer .= $indent . '                </div> <!-- end of #boxForm -->
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!-- <div class="container-fluid">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div> -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- ';
        if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_sponsorsclients')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= ' -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/inc_end')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function sectionA7d00abee6c79ba350aaf13a681986e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>theme_moove/slideshow}}

                    {{^hasdrawertoggle}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/hasdrawertoggle}}
                ';
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
                
                if ($partial = $this->mustache->loadPartial('theme_moove/slideshow')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '
';
                // 'hasdrawertoggle' inverted section
                $value = $context->find('hasdrawertoggle');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div id="loginbox" class="d-none d-lg-block">
';
                    $buffer .= $indent . '                            <div class="card" id="boxForm">
';
                    if ($partial = $this->mustache->loadPartial('theme_moove/frontpage_login')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                ');
                    }
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA85cff20c589daacbd5652cdd0f09653(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#sliderfrontpage}}
                    {{>theme_moove/slideshow}}

                    {{^hasdrawertoggle}}
                        <div id="loginbox" class="d-none d-lg-block">
                            <div class="card" id="boxForm">
                                {{>theme_moove/frontpage_login}}
                            </div>
                        </div>
                    {{/hasdrawertoggle}}
                {{/sliderfrontpage}}
            ';
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
                
                // 'sliderfrontpage' section
                $value = $context->find('sliderfrontpage');
                $buffer .= $this->sectionA7d00abee6c79ba350aaf13a681986e1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f80f96f7e77967629d7665bd41b07d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h1>WELCOME</h1>
                        ';
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
                
                $buffer .= $indent . '                            <h1>WELCOME</h1>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCec9e809619afdab84ddbed6f18481a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h2 style="line-height: 35px; font-size:18px;">E-Learning is learning utilizing electronic technologies to access educational curriculum outside
                              of a traditional classroom. In most cases, it refers to a course,
                              program or degree delivered completely online.</h4>
                        ';
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
                
                $buffer .= $indent . '                            <h2 style="line-height: 35px; font-size:18px;">E-Learning is learning utilizing electronic technologies to access educational curriculum outside
';
                $buffer .= $indent . '                              of a traditional classroom. In most cases, it refers to a course,
';
                $buffer .= $indent . '                              program or degree delivered completely online.</h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
