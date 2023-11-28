<div class="col">
    <div class="card">
        <div class="card-header">
            Tampil Klasemen
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Klub</th>
                        <th>Ma</th>
                        <th>Me</th>
                        <th>S</th>
                        <th>K</th>
                        <th>GM</th>
                        <th>GK</th>
                        <th>Point</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach($tampil as $t): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $t['klub']; ?></td>
                            <td><?= $t['total_main']; ?></td>
                            <td><?= $t['total_menang']; ?></td>
                            <td><?= $t['total_kalah']; ?></td>
                            <td><?= $t['total_seri']; ?></td>
                            <td><?= $t['total_goal_menang']; ?></td>
                            <td><?= $t['total_goal_kalah']; ?></td>
                            <td><?= $t['total_point']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            keterangan:
            <ul>
                <li>Ma = Main</li>
                <li>Me = Menang</li>
                <li>S = Seri</li>
                <li>K = Kalah</li>
                <li>GM = Goal Menang</li>
                <li>GK = Goal Kalah</li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>