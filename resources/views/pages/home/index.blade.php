<x-app-layout>
    <x-slot name="header">

            {{ __('Home') }}

    </x-slot>


                <div>
                    welcome {{ Auth()->user()->name }}!
                </div>

    </div>
</x-app-layout>
