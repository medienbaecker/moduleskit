<?php

class ModuletextPage extends Medienbaecker\Modules\ModulePage
{
    public function excerpt(int $length = 100): string
    {
        return Str::excerpt($this->textarea()->value() ?? '', $length);
    }
}
