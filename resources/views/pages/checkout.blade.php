@extends('layouts.checkout')

@section('title') Checkout @endsection

@section('content')
<main>
    <section class="section-details-header"></section>

    <!-- details -->
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-label="breadcrumb">
                  Paket Travel
                </li>
                <li class="breadcrumb-item " aria-current="page">
                  Details
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Checkout
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Siapa Yang Pergi</h1>
              <p>Trip To Bandung</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <th>
                    <tr>
                      <td>Nama</td>
                      <td>Umur</td>
                      <td>Kebangsaan</td>
                      <td>Asal</td>
                      <td></td>
                    </tr>
                  </th>
                  <tbody>
                    <tr>
                      <td class="align-middle">
                        Salom
                      </td>
                      <td class="align-middle">
                        19 Tahun
                      </td>
                      <td class="align-middle">
                        WNI
                      </td>
                      <td class="align-middle">
                        Lampung
                      </td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="frontend/images/ic_remove.png">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        Gilang
                      </td>
                      <td class="align-middle">
                        20 Tahun
                      </td>
                      <td class="align-middle">
                        WNI
                      </td>
                      <td class="align-middle">
                        Jakarta
                      </td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="frontend/images/ic_remove.png">
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Member</h2>
                <form class="form-inline">
                  <label for="inputusername" class="sr-only">Name</label>
                  <input type="text" name="inputusername" class="form-control mb-2 mr-sm-2" id="inputusername"
                    placeholder="Username" width="">
                  <label for="inputusia" class="sr-only">Usia</label>
                  <input type="text" name="inputusia" class="form-control mb-2 mr-sm-2" id="inputusername"
                    placeholder="Usia">
                  <label for="inputbangsa" class="sr-only">Kebangsaan</label>
                  <select name="inputbangsa" id="inputbangsa" class="custom-select mb-2 mr-sm-2">
                    <option value="WNI" selected>WNI</option>
                    <option value="WNA">WNA</option>
                  </select>
                  <label for="inputasal" class="sr-only">Asal</label>
                  <input type="text" name="inputasal" class="form-control mb-2 mr-sm-2" id="inputasal"
                    placeholder="Asal">

                  <button type="submit" class="btn btn-add-now mb-2 px-4">Tambah</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col lg-4">
            <div class="card card-details card-right">


              <h2>Checkout Information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Jumlah Orang </th>
                  <td width="50%" class="text-right">2 Orang</td>
                </tr>
                <tr>
                  <th width="50%">Asuransi</th>
                  <td width="50%" class="text-right">Rp. 50,000</td>
                </tr>
                <tr>
                  <th width="50%">Harga Perjalanan</th>
                  <td width="50%" class="text-right">Rp. 300,000/Orang</td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">Rp. 650,000</td>
                </tr>
                <tr>
                  <th width="50%">Total (+code unik)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">Rp. 650,</span>
                    <span class="text-orange">630</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Total Pembayaran</h2>
              <p class="pembarayan">
                Please complete your payment before to continue the wonderful trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                  <div class="description">
                    <h3> CV.JC Tour and Travel</h3>
                    <p>0881 8829 8800
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                  <div class="description">
                    <h3> CV.JC Tour and Travel</h3>
                    <p>0899 8501 7888
                      <br>
                      Bank Rakyat Indonesia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="#" class="btn btn-block btn-join-now mt-3 py-2">Checkout</a>
            </div>
            <div class="text-center mt-3">
              <a href="Success.html" class="text-muted">
                Cencel Booking
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function () {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });

    </script>
@endpush
