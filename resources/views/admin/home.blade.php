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
        background-color: #f5f5f5;
    }
    @media screen and (max-width: 600px) {
        table {
            font-size: 14px;
        }
    }
</style>

@section('content')
<div class="container">
    <h3 class="text-center">Blood Donation Admin Panel</h3>
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
                <tr class="t-row">
                    <td>John Doe</td>
                    <td>O+</td>
                    <td>2022-03-28</td>
                    <td>500</td>
                </tr>
                <tr class="t-row">
                    <td>Jane Smith</td>
                    <td>A-</td>
                    <td>2022-03-20</td>
                    <td>250</td>
                </tr>
                <tr class="t-row">
                    <td>Bob Johnson</td>
                    <td>B+</td>
                    <td>2022-03-15</td>
                    <td>350</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
