<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\Palettes\ValentinePalette;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use App\MoonShine\Resources\Category\CategoryResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\Product\ProductResource;

final class MoonShineLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = ValentinePalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make(CategoryResource::class, 'Categories','arrow-right-end-on-rectangle'),
            MenuItem::make(ProductResource::class, 'Products','adjustments-vertical'),
        ];
    }

    // Agrega estos métodos para eliminar el footer:

    protected function getFooterMenu(): array
    {
        return ['https://www.iecefit-envigado-antioquia.edu.co/'=> 'CEFIT']; // No muestra ningún enlace en el pie de página
    }

    protected function getFooterCopyright(): string
    {
        return ''; // No muestra ningún texto de copyright ni branding
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }


}
