@extends('layouts.appOrderPembelian')
@section('content')
    <link href="{{ asset('css/Supplier.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 RDZMobilePaddingLR0">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @elseif (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Supplier</div>
                    <div class="card-body RDZOverflow RDZMobilePaddingLR0">
                        <div style="display: flex;flex-direction: row">

                        </div>
                        <form class="form" method="POST" enctype="multipart/form-data" action="{{ url('Supplier') }}"
                            id="form_supplier">
                            {{ csrf_field() }}
                            <div class="acs-div-container">
                                <div class="acs-div-filter">
                                    <label for="supplier">Supplier</label>
                                    <div class="acs-div-filter2">
                                        <input type="text" name="supplier_text" id="supplier_text" class="input">
                                        <select name="supplier_select" id="supplier_select" style="display: none"
                                            class="input">
                                            <option selected disabled>--Pilih Supplier--</option>
                                            @foreach ($supplier as $data)
                                                <option value="{{ $data->NO_SUP }}">
                                                    {{ $data->NM_SUP }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="supplier_id" id="supplier_id">
                                        <input type="hidden" name="kode" id="kode">
                                        <button id="swtich_supplier" class="btn btn-info"
                                            style="display: inline;">↺</button>
                                    </div>
                                </div>
                            </div>
                            <div class="acs-form">
                                <div class="acs-div-container">
                                    <div class="acs-div-filter1">
                                        <label for="contact_person1">Contact Person 1</label>
                                        <input type="text" name="contact_person1" id="contact_person1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="phone1">Phone 1</label>
                                        <input type="text" name="phone1" id="phone1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="mobile_phone1">Mobile Phone 1</label>
                                        <input type="text" name="mobile_phone1" id="mobile_phone1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="email1">Email 1</label>
                                        <input type="text" name="email1" id="email1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="fax1">Fax 1</label>
                                        <input type="text" name="fax1" id="fax1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="alamat1">Alamat 1</label>
                                        <input type="text" name="alamat1" id="alamat1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="kota1">Kota 1</label>
                                        <input type="text" name="kota1" id="kota1" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="negara1">Negara 1</label>
                                        <input type="text" name="negara1" id="negara1" class="input">
                                    </div>
                                </div>
                                <div class="acs-div-container">
                                    <div class="acs-div-filter1">
                                        <label for="contact_person2">Contact Person 2</label>
                                        <input type="text" name="contact_person2" id="contact_person2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="phone2">Phone 2</label>
                                        <input type="text" name="phone2" id="phone2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="mobile_phone2">Mobile Phone 2</label>
                                        <input type="text" name="mobile_phone2" id="mobile_phone2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="email2">Email 2</label>
                                        <input type="text" name="email2" id="email2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="fax2">Fax 2</label>
                                        <input type="text" name="fax2" id="fax2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="alamat2">Alamat 2</label>
                                        <input type="text" name="alamat2" id="alamat2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="kota2">Kota 2</label>
                                        <input type="text" name="kota2" id="kota2" class="input">
                                    </div>
                                    <div class="acs-div-filter1">
                                        <label for="negara2">Negara 2</label>
                                        <input type="text" name="negara2" id="negara2" class="input">
                                    </div>
                                </div>
                                <div class="acs-div-container">
                                    <button id="save_button" class="acs-btn btn btn-primary">
                                        <span>Save</span></button>
                                    <button id="clear_button" class="acs-btn btn">
                                        <span>Clear All</span></button>
                                    <button id="hapus_button" class="acs-btn btn btn-danger">
                                        <span>Hapus</span></button>
                                </div>
                            </div>
                            <div class="acs-div-filter1">
                                <label for="mata_uang">Mata Uang</label>
                                <select name="mata_uang" id="mata_uang" class="input">
                                    <option selected disabled>-- Pilih Mata Uang--</option>
                                    {{-- @foreach ($matauang as $data)
                                        <option value="{{ $data->Id_MataUang }}">
                                            {{ $data->Nama_MataUang }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/OrderPembelian/Supplier.js') }}"></script>
    @endsection
