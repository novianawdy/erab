<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>

	<center>
		<strong>RENCANA ANGGARAN BIAYA</strong>
    <br>
		<strong style="text-transform: uppercase">PEMBANGUNAN {{ $project->name }}</strong>
	</center>

	<table class='table table-bordered' style="margin-top: 24px">
		<thead>
			<tr>
				<th style="width: 5%">NO</th>
				<th style="width: 40%">URAIAN PEKERJAAN</th>
				<th>VOLUME</th>
				<th>HARGA</th>
				<th>SUBTOTAL</th>
			</tr>
		</thead>
		<tbody>
      @php
        $total = 0;
      @endphp
      @foreach ($project->jobs as $i => $job)
        <tr>
          <td style="text-align: center">{{ $i+1 }}</td>
          <td colspan="4"><strong style="text-transform: uppercase">{{ $job->type }}</strong></td>
        </tr>
        @php
          $subtotal_job = 0;
        @endphp
        @foreach ($job->project_detail as $j => $project_detail)
          @php
            $subtotal_job += $project_detail->subtotal;
            $total += $project_detail->subtotal
          @endphp
          <tr>
    				<td style="text-align: center">{{ $j+1 }}</td>
    				<td>{{ $job->name }}</td>
    				<td style="text-align: center">{{ $project_detail->volume }}</td>
    				<td style="text-align: right">Rp {{ number_format($project_detail->subtotal_job,0,".",".") }}</td>
    				<td style="text-align: right">Rp {{ number_format($project_detail->subtotal,0,".",".") }}</td>
    			</tr>
        @endforeach
        <tr>
          <td colspan="5" style="text-align: right"><strong>Rp {{ number_format($subtotal_job,0,".",".") }}</strong></td>
        </tr>
      @endforeach
		</tbody>
	</table>

  <div style="width: 100%; text-align: right; margin-top: 48px">
    <strong>Total Biaya</strong> : <span>Rp {{ number_format($total,0,".",".") }}</span>
  </div>

</body>
</html>
