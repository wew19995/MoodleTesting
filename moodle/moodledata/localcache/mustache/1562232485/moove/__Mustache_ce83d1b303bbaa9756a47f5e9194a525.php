<?php

class __Mustache_ce83d1b303bbaa9756a47f5e9194a525 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="top-footer">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-7 contact">
';
        $buffer .= $indent . '            <h3>Contact Info</h3>
';
        $buffer .= $indent . '            <ul>
';
        // 'website' section
        $value = $context->find('website');
        $buffer .= $this->section828ad24f3493b901409f3758d9958ad0($context, $indent, $value);
        // 'mobile' section
        $value = $context->find('mobile');
        $buffer .= $this->section7315fbb5af1e5d69def6726417734e3f($context, $indent, $value);
        // 'mail' section
        $value = $context->find('mail');
        $buffer .= $this->sectionD3f23e142ca865be74aee00623ae8b8d($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-5 social">
';
        $buffer .= $indent . '          <ul>
';
        // 'facebook' section
        $value = $context->find('facebook');
        $buffer .= $this->section717e9da497aaaaec4cfa8f9997913fa7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'twitter' section
        $value = $context->find('twitter');
        $buffer .= $this->section60719e78ea6e626aadec32b787d17da0($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'googleplus' section
        $value = $context->find('googleplus');
        $buffer .= $this->sectionCdab66008e1f30f287340f9bdad93543($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'linkedin' section
        $value = $context->find('linkedin');
        $buffer .= $this->sectionDe480e3276d238437465408012d79708($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'youtube' section
        $value = $context->find('youtube');
        $buffer .= $this->section3eb5d36117446ef5ed54fb4b27fcb1c3($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'instagram' section
        $value = $context->find('instagram');
        $buffer .= $this->sectionCd2c8df34486582fad7201a68b4ac4b3($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section828ad24f3493b901409f3758d9958ad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-globe"></i>
                        <a href="{{{website}}}" target="_blank">http://www.cbinsurance.com.mm/</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-globe"></i>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">http://www.cbinsurance.com.mm/</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7315fbb5af1e5d69def6726417734e3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-phone"></i>
                        <a href="tel:{{{mobile}}}" target="_blank">01-541994, 01-557640</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-phone"></i>
';
                $buffer .= $indent . '                        <a href="tel:';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">01-541994, 01-557640</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3f23e142ca865be74aee00623ae8b8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-envelope"></i>
                        <a href="mailto:{{{mail}}}" target="_blank">contact@cbinsurance.com.mm</a>
                    </li>
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
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-envelope"></i>
';
                $buffer .= $indent . '                        <a href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">contact@cbinsurance.com.mm</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section717e9da497aaaaec4cfa8f9997913fa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{facebook}}}" target="_blank" class="facebook btn">
                    <i class="slicon-social-facebook"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="facebook btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-facebook"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60719e78ea6e626aadec32b787d17da0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{twitter}}}" target="_blank" class="twitter btn">
                    <i class="slicon-social-twitter"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="twitter btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-twitter"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdab66008e1f30f287340f9bdad93543(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{googleplus}}}" target="_blank" class="googleplus btn">
                    <i class="slicon-social-google"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('googleplus'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="googleplus btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-google"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe480e3276d238437465408012d79708(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{linkedin}}}" target="_blank" class="linkedin btn">
                    <i class="slicon-social-linkedin"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="linkedin btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-linkedin"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3eb5d36117446ef5ed54fb4b27fcb1c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{youtube}}}" target="_blank" class="youtube btn">
                    <i class="slicon-social-youtube"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="youtube btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-youtube"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd2c8df34486582fad7201a68b4ac4b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{instagram}}}" target="_blank" class="instagram btn">
                    <i class="slicon-social-instagram"></i>
                  </a>
                </li>
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
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="instagram btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-instagram"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
