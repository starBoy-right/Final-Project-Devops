@extends('layouts.admin')

@section('title', 'Pemesanan')
@section('page-title', 'Data Pemesanan')

@section('content')
<div style="background:#fff; padding:20px; border-radius:14px; box-shadow:0 4px 20px rgba(0,0,0,0.08); overflow-x:auto;">

    <table style="width:100%; border-collapse:collapse; min-width:600px;">
        <thead style="background:#f3f4f6;">
            <tr>
                <th style="text-align:left; padding:12px 15px; font-weight:600; color:#111827;">Nama</th>
                <th style="text-align:left; padding:12px 15px; font-weight:600; color:#111827;">Email</th>
                <th style="text-align:left; padding:12px 15px; font-weight:600; color:#111827;">Pesan</th>
                <th style="text-align:left; padding:12px 15px; font-weight:600; color:#111827;">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr style="border-bottom:1px solid #e5e7eb;">
                    <td style="padding:12px 15px;">{{ $order->nama }}</td>
                    <td style="padding:12px 15px;">{{ $order->email }}</td>
                    <td style="padding:12px 15px;">{{ $order->message }}</td>
                    <td style="padding:12px 15px;">{{ $order->created_at->format('d M Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding:12px 15px; text-align:center; color:#6b7280;">Belum ada pemesanan</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
