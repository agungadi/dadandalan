@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.jembatan.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.id_user') }}
                    </th>
                    <td>
                        {{ $jembatan->idUser }}
                    </td>
                </tr>
                <tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.image') }}
                    </th>
                    <td>
                        {{ $jembatan->image }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.deskripsi') }}
                    </th>
                    <td>
                        {{ $jembatan->deskripsi }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.alamat') }}
                    </th>
                    <td>
                        {{ $jembatan->alamat }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.kecamatan') }}
                    </th>
                    <td>
                        {{ $jembatan->kecamatan }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.latitude') }}
                    </th>
                    <td>
                        {{ $jembatan->latitude }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.longtitude') }}
                    </th>
                    <td>
                        {{ $jembatan->longtitude }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.jembatan.fields.created_at') }}
                    </th>
                    <td>
                        {{ $jembatan->created_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection