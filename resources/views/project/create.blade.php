@extends('layouts.app')

@section('content')
    {{-- <div class="content-wrapper" style="min-height: 1302.4px;"> --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1>Project-managment</h1> --}}
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('project.fields')
                </div>
            </div>
        </div>
    </section>
    {{-- </div> --}}
@endsection
