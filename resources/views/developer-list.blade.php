@extends('layouts.app')
@section("title","Developer List")
@section('content')
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Developer Name
            </th>
            <th scope="col" class="px-6 py-3">
                Difficulty
            </th>
            <th scope="col" class="px-6 py-3">
                Intensity
            </th>
            <th scope="col" class="px-6 py-3">
                Intensity Week
            </th>
            <th scope="col" class="px-6 py-3">
                Task Count
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($developers as $developer)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $developer->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $developer->difficulty }} <small>level</small>
                </td>
                <td class="px-6 py-4">
                    {{ $developer->intensity }} <small>hours</small>
                </td>
                <td class="px-6 py-4">
                    {!! $developer->intensity_week  !!}
                </td>
                <td class="px-6 py-4">
                    {{ $developer->tasks_count }} <small>task</small>
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route("developer-detail",['developer' => $developer->id]) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
