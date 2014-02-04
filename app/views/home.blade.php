@extends('layout')

@section('content')
<div id="slider" class="sl-slider-wrapper">
 
    <div class="sl-slider">
     
        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="deco" data-icon="H"></div>
                <h2>Home</h2>
                <blockquote>
                    <p>Home text.</p>
                </blockquote>
            </div>
        </div>
         
        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="-45" data-slice2-rotation="15" data-slice1-scale="1" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="deco" data-icon="I"></div>
                <h2>Home 2</h2>
                <blockquote>
                    <p>More home text.</p>
                </blockquote>
            </div>
        </div>
		
        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="80" data-slice1-scale="2" data-slice2-scale="3">
            <div class="sl-slide-inner">
                <div class="deco" data-icon="V"></div>
                <h2>Home 3</h2>
                <blockquote>
                    <p>Some more text.</p>
                </blockquote>
            </div>
        </div>
    </div>
 
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev">Previous</span>
        <span class="nav-arrow-next">Next</span>
    </nav>
</div>
@stop