@props(['title'=>'', 'footerLinks'=>''])
<x-base-layout :$title>
    <x-layouts.header/>
    {{$slot}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; {{ date('Y') }} Your Cali Name. All rights reserved.</p>
                </div>
            </div>
        </div>
        <a href="#">Link1</a>
        {{$footerLinks}}
    </footer>


</x-base-layout>











