@extends('layouts.app')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .t-row:hover {
        background-color: #bff8fa;
    }
    @media screen and (max-width: 600px) {
        table {
            font-size: 14px;
        }
    }
</style>

@section('content')
<div class="container">
    <h3 class="text-center">Blood Donation Details</h3>
    <div class="row">
        <table>
            <thead class="text-light bg-dark">
                <tr>
                    <th>Donor Name</th>
                    <th>Blood Group</th>
                    <th>Date of Donation</th>
                    <th>Quantity (in ml)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                    <tr class="t-row">
                        <td> {{$donation->donor_name}} </td>
                        <td> {{$donation->blood_group}} </td>
                        <td> {{$donation->date_of_donation}} </td>
                        <td> {{$donation->quantity}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
