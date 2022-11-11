<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    /**default classes */
    public array $defaultClasses = [
        'flex',
        'items-center',
        'justify-between',
        'w-full',
        'max-w-full',
        'min-h-[3rem]',
        'px-4',
        'py-2',
        'text-center',
        'uppercase',
        'tracking-widest',
        'duration-400'
    ];
    /**
     * @var string[]
     */
    protected array $types = [
        'primary' => [
            'font-bold',
            'bg-primary',
            'shadow-glow',
            'shadow-primary/25',
            'hover:shadow-primary',
            'transition-all',
            'text-white'
        ],
        'secondary' => [
            'md:px-2',
            'lg:px-4',
            'py-3',
            'border',
            'border-white',
            'hover:bg-white',
            'hover:text-dark-gray',
            'transition-colors',
            'whitespace-nowrap'
        ],
        'light' => [
            'font-medium',
            'bg-white border',
            'border-black',
            'text-black'
        ],
    ];
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $title;
    /**
     * @var string
     */
    public array $type;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->type = $data['type'] ?? $this->types['primary'];
        $this->url = $data['href'];
        $this->title = $data['title'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
