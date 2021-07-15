<script>
	var menu_active = document.getElementById('dashboard');
	menu_active.classList.add('active');
	new Chart(document.getElementById("pie-chart-penjualan"), {
		type: 'pie',
		data: {
			labels: ['Wanita', 'Pria'],
			datasets: [{
				'label': 'Karyawan Divisi Penjualan',
				data: [300, 50],
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
				data: [300, 50],
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