<?php

declare(strict_types=1);

namespace App\Actions\Sources;

use App\Actions\Sources\Inputs\StoreSourceInput;
use App\Models\Source;
use App\Normalizer;

class StoreSource
{
    public function handle(StoreSourceInput $input): Source
    {
        $source = new Source;

        $source->name = $input->name;
        $source->provider = $input->provider;
        $source->url = Normalizer::url($input->url);
        $source->token = encrypt($input->token);

        $source->save();

        return $source;
    }
}
