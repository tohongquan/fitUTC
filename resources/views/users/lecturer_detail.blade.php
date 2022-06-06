@extends('layouts.app')
@section('title', 'Danh sách giảng viên')
@section('lecturers')
    <h4>Danh sách giảng viên</h4>
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
                    <td>{{$ele->full_name}}</td>
                    <td><span class="image"><img src="{{ URL::to('/uploads') }}/{{$ele->thumbnail('small','avatar')}}" alt="" /></span></td>
{{--                    <td>{{$ele->subject_set}}</td>--}}
                    <td>{{$ele->subjectSet->name}}</td>
                    <td>{{$ele->phone_number}}</td>
                    <td>{{$ele->email}}</td>
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
