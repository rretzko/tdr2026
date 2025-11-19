<svg {{ $attributes->merge(['class' => 'w-full h-full']) }} xmlns="http://www.w3.org/2000/svg" viewBox="-10 -10 500 500" role="img" aria-labelledby="title desc">
    <title id="title">TDR Monogram</title>
    <desc id="desc">Outlined TDR monogram with R moved down and left so the total width fits within the T's raised crossbar span.</desc>
    <style>
        :root {
            --t: #FF3B30;
            --d: #D32F2F;
            --r: #B71C1C;
        }
        .stroke { fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 28; }
        .t { stroke: var(--t); }
        .d { stroke: var(--d); }
        .r { stroke: var(--r); }
    </style>
    <g class="stroke d">
        <path d="M120,100 V308" />
        <path d="M120,100 H200 C280,100 280,308 200,308 H120" />
    </g>
    <g class="stroke r" transform="translate(-40,60)">
        <path d="M260,100 V308" />
        <path d="M260,100 H320 C380,100 380,200 320,200 H260" />
        <path d="M320,200 L380,308" />
    </g>
    <g class="stroke t">
        <path d="M60,40 H360" />
        <path d="M180,40 V308" />
    </g>
</svg>

