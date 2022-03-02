<div class="row mt">
        <!-- Awal col-lg-7 -->
        <div class="col-lg-12 mb-4">
            <div class="card shadow bg-gradient-light">
                <!-- Awal card-body -->
                <div class="card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Identitas Tamu Lama</h1>
                            </div>
                            <form class="user" method="POST" action="proses_autocomplete.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="no_ktp" id="no_ktp" placeholder="No KTP" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="keperluan" placeholder="Keperluan" required>
                                </div>
                                <input type="submit" name="btcheckin" class="btn btn-primary btn-user btn-block"  value="Check In"></input>
                            </form>
                            <hr>
                </div>
                <!-- end card-body -->
            </div>
        </div>