<?php

namespace Fey\Patterns\Creational\Builder;

class Bootstrap5FormBuilder extends FormBuilder
{
    public function email($name, $value, $label): self
    {
        $this->formParts[] = <<<HTML
<div class="mb-3">
  <label class="form-label">
  ${label}
  <input type="email" class="form-control" placeholder="name@example.com" value="$value" name="${name}">
  </label>
</div>
HTML;
        return $this;
    }
}