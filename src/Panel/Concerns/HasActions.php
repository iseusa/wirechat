<?php

namespace Wirechat\Wirechat\Panel\Concerns;

use Closure;

trait HasActions
{
    protected bool|Closure $redirectToHomeAction = false;

    protected bool|Closure $showLeftActions = true;

    protected bool|Closure $showTextArea = true;

    protected bool|Closure $showRightActions = true;

    protected bool|Closure $isEnabledShiftEnter = true;

    public function redirectToHomeAction(bool|Closure $condition = true): static
    {
        $this->redirectToHomeAction = $condition;

        return $this;
    }

    public function hasRedirectToHomeAction(): bool
    {
        return (bool) $this->evaluate($this->redirectToHomeAction);
    }

    public function showLeftActions(): bool
    {
        return $this->evaluate($this->showLeftActions);
    }

    public function showTextArea(): bool
    {
        return $this->evaluate($this->showTextArea);
    }

    public function showRightActions(): bool
    {
        return $this->evaluate($this->showRightActions);
    }

    public function isEnabledShiftEnter(): bool
    {
        return $this->evaluate($this->isEnabledShiftEnter);
    }
}
