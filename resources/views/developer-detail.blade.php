@extends('layouts.app')
@section("title", $developer->name." Detail")
@section('content')
    <div class="grid mb-5 rounded-lg">
        <div class="w-full">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tr>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Developer Name:</td>
                    <td class="px-6 py-3">{{ $developer->name }}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Developer Difficulty Level:</td>
                    <td class="px-6 py-3">{{ $developer->difficulty }} <small>level</small></td>
                </tr>
                <tr>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Developer Intensity:</td>
                    <td class="px-6 py-3">{{ $developer->intensity }} <small>hours</small></td>
                </tr>
                <tr>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">Developer Intensity Week:</td>
                    <td class="px-6 py-3">{!! $developer->intensity_week  !!}</td>
                </tr>
            </table>
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Task Title
            </th>
            <th scope="col" class="px-6 py-3">
                Difficulty
            </th>
            <th scope="col" class="px-6 py-3">
                Task Time
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($developer->tasks as $task)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $task->task }}
                </th>
                <td class="px-6 py-4">
                    {{ $task->difficulty }} <small>level</small>
                </td>
                <td class="px-6 py-4">
                    {{ $task->time }} <small>hours</small>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
