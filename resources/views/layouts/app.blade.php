@props(['title'=>'', 'footerLinks'=>''])
<x-base-layout :$title>
    <x-layouts.header/>
    {{$slot}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; {{ date('Y') }} ALI TAYYAB. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>


</x-base-layout>











