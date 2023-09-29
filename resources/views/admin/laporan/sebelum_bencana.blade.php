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

<h3><center><b>REKAPITULASI {{ $judul }}</b></center></h3>
<br>

<h4>Jumlah seluruh {{ $judul }} : {{ $jumlahData }} Laporan</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Responden</th>
            <th>RW</th>
            <th>RT</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @php $nomorIterasi = 1 @endphp
        @foreach ($riwayats as $riwayat)
            @php
                //objek 'ResponKuisioner' berdasarkan ID
                $responKuisioner = \App\Models\ResponKuisioner::find($riwayat['id']);
            @endphp

            @if ($responKuisioner)
                @php
                    //objek 'user' dari 'ResponKuisioner'
                    $user = $responKuisioner->user;
                @endphp

                @if ($user)
                    <tr>
                        <td>{{ $nomorIterasi }}.</td>
                        <td>{{ $user->name }}</td>
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
                        <td>
                            {{ date('d F Y H:i:s', strtotime($riwayat['created_at'])) }}
                        </td>
                    </tr>
                    @php $nomorIterasi++ @endphp
                @endif
            @endif
        @endforeach


    </tbody>
</table>
