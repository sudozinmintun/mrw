@extends('layouts.app')
@section('title', '- Projects')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0 mt-n2-2">
                    <center>
                        <h3>
                            Our Projects
                        </h3>
                    </center>
                </div>

                <div class="col-lg-12 mb-5 mb-lg-0 mt-n2-2 py-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: #E93F33;">
                                <th scope="col" style="color: white; width: 1%;">Sr</th>
                                <th scope="col" style="color: white; width: 50%;">
                                    Description
                                </th>
                                <th scope="col" style="color: white; width: 20%">
                                    Customer Name
                                </th>
                                <th scope="col" style="color: white; width: 10%">
                                    Staring Date
                                </th>
                                <th scope="col" style="color: white; width: 10%">
                                    End Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project_lists as $key => $project_list)
                                <tr>
                                    <th scope="row">
                                        {{ $key + 1 }}
                                    </th>
                                    <td>
                                        {{ $project_list->project ?? '' }}
                                    </td>
                                    <td>
                                        {{ $project_list->project_situation ?? '' }}
                                    </td>
                                    <td>
                                        {{ $project_list->status_of_completion ?? '' }}
                                    </td>
                                    <td>
                                        {{ $project_list->end_date ?? '' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
