<!DOCTYPE html>
@extends('templates.master')

@section('content')
    <section class="inner_page_head">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Silahkan Pilih Kain Troso</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_section layout_padding">
    <form action="">
    @csrf

    <h1>Hasil prototype</h1>
    <img src="" alt="">
    
    <h1>Masukkan jumlah pesanan</h1>
    <input type="text">
    <input type="submit">
    </form>

</section>
@endsection