@extends('backoffice.layouts.app_customer')
@section('title')
    NEKO|Client Dashboard
@endsection
@section('sidebar_menu')
@include('backoffice.modules.customer_page_modules.customer_side_menu')
@endsection
@section('page_header_title')
@include('backoffice.modules.customer_page_modules.customer_page_title')
@endsection
@section('content')
<h3>Hello this is dashboard client page</h3>
@endsection
