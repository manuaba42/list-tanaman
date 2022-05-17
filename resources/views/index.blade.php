<!DOCTYPE html>
<html>

<head>
    <title>Tanaman</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
</head>

<body>

    <div class="container">
        <h2>Tanaman</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAtap" id="open">Atap</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalDinding" id="open">Dinding</button>
        <form method="get" action="{{url('list')}}" id="form">
            <button type="Submit" class="btn btn-info btn-lg" id="arsitektural" name="arsitektural[]" value="3">Lantai</button>
        </form>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalEst" id="open">Estetika</button>

        <form method="get" action="{{url('list')}}" id="form">
            <!-- Modal -->
            <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" id="modalAtap" style="width: 100%;">
                <div class="modal-dialog modal-lg" role="document" style="width: 100%;">
                    <div class="modal-content">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-header">
                            <h5 class="modal-title">Fungsi Arsitektural Atap > </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @foreach($ataps as $atap)
                            <label class="checkbox-inline">
                                <input type="checkbox" id="atap" name="atap[]" value="{{$atap->id}}"> {{ucfirst($atap->nama)}}
                            </label>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                            <button class="btn btn-success" value="Submit">Result</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" id="modalDinding" style="width: 100%;">
                <div class="modal-dialog modal-lg" role="document" style="width: 100%;">
                    <div class="modal-content">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-header">
                            <h5 class="modal-title">Fungsi Arsitektural Dinding > </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @foreach($dindings as $dinding)
                            <label class="checkbox-inline">
                                <input type="checkbox" id="dinding" name="dinding[]" value="{{$dinding->id}}"> {{ucfirst($dinding->nama)}}
                            </label>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                            <button class="btn btn-success" value="Submit">Result</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" id="modalEst" style="width: 100%;">
                <div class="modal-dialog modal-lg" role="document" style="width: 100%;">
                    <div class="modal-content">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-header">
                            <h5 class="modal-title">Fungsi Arsitektural Estetika > </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @foreach($estetikas as $estetika)
                            <label class="checkbox-inline">
                                <input type="checkbox" id="estetika" name="estetika[]" value="{{$estetika->id}}"> {{ucfirst($estetika->nama)}}
                            </label>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                            <button class="btn btn-success" value="Submit">Result</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>