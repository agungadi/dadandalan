@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.jalan.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.jalan.fields.id_user') }}
                    </th>
                    <td>
                        {{ $jalan->idUser }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jalan.fields.image') }}
                    </th>
                    <td>
                        <img src="{{ asset('storage/image/'.$jalan->image) }}" alt="laporan" title="jalan" width="350" height="400"/>

                    </td>
                </tr>
                
                <tr>
                    <th>
                        {{ trans('global.jalan.fields.deskripsi') }}
                    </th>
                    <td>
                        {{ $jalan->deskripsi }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jalan.fields.alamat') }}
                    </th>
                    <td>
                        {{ $jalan->alamat }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jalan.fields.kecamatan') }}
                    </th>
                    <td>
                        {{ $jalan->kecamatan }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jalan.fields.latitude') }}
                    </th>
                    <td>
                        {{ $jalan->latitude }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.longtitude') }}
                    </th>
                    <td>
                        {{ $jalan->longtitude }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.created_at') }}
                    </th>
                    <td>
                        {{ $jalan->created_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection