@extends('layouts.app')
@section('title', 'Danh sách công ty đối tác')
@section('partnerCompany')
    <h2 class="major">Danh sách giảng viên</h2>
    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Tên</th>
                <th>Logo</th>
                <th>Tên đầy đủ</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($partnerCompany as $ele)
                <tr>
                    <td><div class="column-container">{{$ele->name}}</div></td>
                    <td><div class="column-container"><img src="{{ URL::to('/uploads') }}/{{$ele->thumbnail('small','avatar')}}" alt="" /></div></td>
                    <td><div class="column-container">{{$ele->full_name}}</div></td>
                </tr>
            @endforeach

            </tbody>
{{--            <tfoot>--}}
{{--            <tr>--}}
{{--                <td colspan="2"></td>--}}
{{--                <td>100.00</td>--}}
{{--            </tr>--}}
{{--            </tfoot>--}}
        </table>
    </div>
@endsection
