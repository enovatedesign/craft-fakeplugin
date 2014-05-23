<?php
namespace Craft;

class FakeVariable
{

    protected $faker;

    public function factory($locale=null)
    {

        if (! $locale)
        {
            $locale = craft()->language;
        }

        $this->faker = \Faker\Factory::create($locale);

        return $this->faker;
    }

}
