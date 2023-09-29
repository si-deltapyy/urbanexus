<style>
    .table {
        border-collapse: collapse;
    }

    td,
    th {
        font-size: 10.5pt;
        border: 1px solid black;
        padding: 5px;
    }
</style>

<h3>
    <center><b>{{ $judul }}</b></center>
</h3>
<br>

<h4>Jumlah seluruh {{ $judul }} : {{ $jumlahData }} Laporan</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>RW</th>
            <th>RT</th>
            <th>Jumlah Penduduk</th>
            <th>Jumlah Warga Terdampak </th>
            <th>Waktu Diperbarui</th>
        </tr>
    </thead>
    <tbody>
        @php $nomorIterasi = 1 @endphp
        @foreach ($laporan as $item)
            @php
                //objek 'ResponKuisioner' berdasarkan ID
                $responKuisioner = \App\Models\ResponKuisioner::find($item['id']);
            @endphp

            @if ($responKuisioner)
                @php
                    //objek 'user' dari 'ResponKuisioner'
                    $user = $responKuisioner->user;
                @endphp

                @if ($user)
                    <tr>
                        <td>{{ $nomorIterasi }}.</td>
                        
                        <td>
                            @foreach ($user->roles as $role)
                                @if ($role->name == 'RW')
                                    {{ optional($user->rw)->id }}
                                @elseif ($role->name == 'RT')
                                    {{ $user->rt->rw->id ?? '-' }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($user->roles as $role)
                                @if ($role->name == 'RW')
                                    {{ $user->rt->id ?? '-' }}
                                @elseif ($role->name == 'RT')
                                    {{ $user->rt->id ?? '-' }}
                                @endif
                            @endforeach
                        </td>
                        <td> {{ $item['total_jawaban'] }}</td>
                        <td>{{ $item['jawaban_91'] }}</td>
                        <td>{{ $item['timestamp'] }}</td>                        
                    </tr>
                    @php $nomorIterasi++ @endphp
                @endif
            @endif
        @endforeach




    </tbody>
</table>
