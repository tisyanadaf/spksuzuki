<script>
	var menu_active = document.getElementById('dashboard');
	menu_active.classList.add('active');
	new Chart(document.getElementById("pie-chart-penjualan"), {
		type: 'pie',
		data: {
			labels: ['Wanita', 'Pria'],
			datasets: [{
				'label': 'Karyawan Divisi Penjualan',
				data: [{{$penjualan_wanita[0]->jumlah}}, {{$penjualan_pria[0]->jumlah}}],
				backgroundColor: ['rgb(255, 99, 132)',
					'rgb(54, 162, 235)'
				],
			}]
		},
		options: {
			responsive: true
		}
	});

	new Chart(document.getElementById("pie-chart-service"), {
		type: 'pie',
		data: {
			labels: ['Wanita', 'Pria'],
			datasets: [{
				'label': 'Karyawan Divisi Service',
				data: [{{$service_wanita[0]->jumlah}}, {{$service_pria[0]->jumlah}}],
				backgroundColor: ['rgb(255, 99, 132)',
					'rgb(54, 162, 235)'
				],
			}]
		},
		options: {
			responsive: true
		}
	});
</script>