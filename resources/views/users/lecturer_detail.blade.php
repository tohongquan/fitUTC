@extends('layouts.app')
@section('title', 'Danh sách giảng viên')
@section('lecturers')
    <h2 class="major">Danh sách giảng viên</h2>
    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th>Họ tên</th>
                <th>Ảnh</th>
                <th>Bộ môn</th>
                <th>Số điện thoại</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($lecturers as $ele)
                <tr>
                    <td><div class="column-container">{{$ele->full_name}}</div></td>
                    <td><div class="column-container"><img src="{{ URL::to('/uploads') }}/{{$ele->thumbnail('small','avatar')}}" alt="" /></div></td>
                    <td><div class="column-container">{{$ele->subjectSet->name}}</div></td>
                    <td><div class="column-container">{{$ele->phone_number}}</div></td>
                    <td><div class="column-container">{{$ele->email}}</div></td>
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
