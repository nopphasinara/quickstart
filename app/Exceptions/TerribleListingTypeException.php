<?php

namespace App\Exceptions;

use App\ListingType;

class TerribleListingTypeException extends \Exception
{
    protected $listingType;

    public function __construct(ListingType $listingType)
    {
        $this->listingType = $listingType;
    }

    /**
     * @param \Illuminate\Http\Request $request
     */
    public function render($request)
    {
        return response("The listingType '{$this->listingType->title}' by '{$this->listingType->artist}' is terrible.");
    }
}
