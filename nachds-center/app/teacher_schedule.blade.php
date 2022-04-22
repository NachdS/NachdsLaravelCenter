{{-- @extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')
   <!--  <div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25 min-heigth">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-clipboard-alt"></i> Emplois du temps</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive mt-30">
                            <table class="table ucp-table earning__table">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Séance</th>
                                        <th scope="col">Salle</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Nombre d'heures</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Séance 1</td>
                                        <td>Salle 2</td>
                                        <td>15 Mar 2020</td>
                                        <td>2h</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Séance 2</td>
                                        <td>Salle 4</td>
                                        <td>16 Mar 2020</td>
                                        <td>2h</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
 --}}




 <style>
    .app-container.expanded .side-body{
        margin-left: 9%;
    }
    #table_timeline {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #table_timeline td, #table_timeline th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #table_timeline tr:nth-child(even){background-color: #f2f2f2;}

    #table_timeline tr:hover {background-color: #ddd;}

    #table_timeline th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #2e363e;
      color: white;
    }
</style>
<div class="page-content">
    <div class="side-body padding-top">
        <table width="100%">
            <tr>
                <td><a href="#" onclick="PrintElem('emploi')" title="print" class="btn btn-sm btn-default edit" style="color:#000000;"><img src="{{ asset('images/icons/print.png') }}" width="28px" height="28px"></a></td>
                @if(!@$groupe_selected)
                <td align="right"><label>Consulter l'emploi à partir du </label>&nbsp;&nbsp;</td>
                <td align="right">
                    @if(@$enseignant_selected)
                    <input type="date" name="search_by_date" value="" class="form-control" onchange="window.open('../'+this.value+'/'+{{@$enseignant_selected}});window.close();">
                    @else
                        @if(@$date)
                        <input type="date" name="search_by_date" value="" class="form-control" onchange="window.open(this.value);window.close();">
                        @else
                        <input type="date" name="search_by_date" value="" class="form-control" onchange="window.open('emploi/'+this.value);window.close();">
                        @endif
                    @endif
                </td>
                @endif
            </tr>
        </table>
        <div id="emploi">
            <?php if(@$date){ @$date_selected = $date; }else{ @$date_selected = date('Y-m-d'); } ?>
            <center>
                <h4>
                    Emploi
                    @if(@$groupe_selected)
                        <?php
                            $groupe = App\Models\Groupe::
                            join('formations', 'groupes.formation_id', 'formations.id')
                            ->join('sessions', 'groupes.session_id', 'sessions.id')
                            ->where('groupes.id', $groupe_selected)
                            ->select(
                                'formations.designation as formation',
                                'sessions.abreviation as session',
                                'groupes.designation as groupe',
                                'groupes.id as id',
                                'groupes.from as from'
                            )
                            ->first();
                        ?>
                        du <font color="#2e85d5">{{ $groupe->session }} - {{ $groupe->formation }} - {{ $groupe->groupe }}</font> à partir du {{ date('d/m/Y', strtotime(@$groupe->from)) }}
                    @elseif(@$enseignant_selected)
                        <?php $enseignant = App\Models\Enseignant::where('id', $enseignant_selected)->first(); ?>
                        de <font color="#2e85d5">@if($enseignant->genre == "m") l'enseignant M.@elseif($enseignant->genre == "f") l'enseignante Mme.@endif{{ $enseignant->name }}</font> à partir du {{ date('d/m/Y', strtotime(@$date_selected)) }}
                    @else
                        à partir du {{ date('d/m/Y', strtotime(@$date_selected)) }}
                    @endif
                </h4>
            </center>
            <br>
            @if(!@$groupe_selected && !@$enseignant_selected)
                <?php $sessions = App\Models\Session::get(); $tab_groupe_id = array(); $k = 0; ?>
                @foreach(@$sessions as $session)
                    <?php
                        $date_actuelle = date('Y-m-d');
                        $session_debut = @$session->debut;
                        $session_fin = date('Y-m-d', strtotime(@$session_debut) + 86400 * @$session->duree );
                    ?>
                    @if($date_actuelle >= $session_debut && $date_actuelle <= $session_fin)
                        <?php
                            $formations = App\Models\Formation::
                            join('groupes', 'formations.id', 'groupes.formation_id')
                            ->join('sessions', 'groupes.session_id', 'sessions.id')
                            ->where('sessions.id', @$session->id)
                            ->select(
                                'formations.id as formation_id',
                                'formations.designation as formation_designation'
                            )
                            ->distinct()
                            ->get();
                        ?>
                        @foreach(@$formations as $formation)
                            <?php
                                $specific_groupes = App\Models\Groupe::
                                join('sessions', 'groupes.session_id', 'sessions.id')
                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                ->where('sessions.id', @$session->id)
                                ->where('formations.id', @$formation->formation_id)
                                ->select(
                                    'groupes.slug as slug',
                                    'groupes.designation as designation',
                                    'groupes.id as id'
                                )
                                ->get();
                            ?>
                            @foreach($specific_groupes as $groupe)
                                <?php
                                    if(!in_array($groupe->id, $tab_groupe_id))
                                        $tab_groupe_id[$k++] = $groupe->id;
                                ?>
                            @endforeach
                        @endforeach
                    @endif
                @endforeach
            @elseif(@$enseignant_selected)
                <?php $sessions = App\Models\Session::get(); $tab_groupe_id = array(); $k = 0;?>
                @foreach(@$sessions as $session)
                    <?php
                        $date_actuelle = date('Y-m-d');
                        $session_debut = @$session->debut;
                        $session_fin = date('Y-m-d', strtotime(@$session_debut) + 86400 * @$session->duree );
                        $formations = App\Models\Formation::
                        join('groupes', 'formations.id', 'groupes.formation_id')
                        ->join('sessions', 'groupes.session_id', 'sessions.id')
                        ->where('sessions.id', @$session->id)
                        ->select(
                            'formations.id as formation_id',
                            'formations.designation as formation_designation'
                        )
                        ->distinct()
                        ->get();
                    ?>
                    @foreach(@$formations as $formation)
                        <?php
                            $specific_groupes = App\Models\Groupe::
                            join('sessions', 'groupes.session_id', 'sessions.id')
                            ->join('formations', 'groupes.formation_id', 'formations.id')
                            ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                            ->where('enseignants.id', @$enseignant_selected)
                            ->where('sessions.id', @$session->id)
                            ->where('formations.id', @$formation->formation_id)
                            ->select(
                                'groupes.slug as slug',
                                'groupes.designation as designation',
                                'groupes.id as id'
                            )
                            ->get();
                        ?>
                        @foreach($specific_groupes as $groupe)
                            <?php
                                if(!in_array($groupe->id, $tab_groupe_id))
                                    $tab_groupe_id[$k++] = $groupe->id;
                            ?>
                        @endforeach
                    @endforeach
                @endforeach
            @elseif(@$groupe_selected)
                <?php $tab_groupe_id[0] = $groupe_selected; ?>
            @endif
            <table width="100%" border="1" id="table_timeline">
                <thead>
                    <th>Jours</th>
                    <?php $horaires = App\Models\Horaire::orderby('ordre')->where('activer', '1')->get();?>
                    @foreach($horaires as $horaire)
                    <th><center>{{ $horaire->designation }}</center></th>
                    @endforeach
                </thead>
                <tbody>
                    <tr>
                        <td style="padding-left: 5px;">Lundi</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Lundi']
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                                $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                $salle = @$salle_info->designation;
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;">Mardi</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Mardi']
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;">Mercredi</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Mercredi'],
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;">Jeudi</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Jeudi'],
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;">Vendredi</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Vendredi'],
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;">Samedi</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Samedi'],
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td style="padding-left: 5px;">Dimanche</td>
                        @foreach($horaires as $horaire)
                            <?php $seances2 = App\Models\Seance::where([
                                ['horaire_id', $horaire->id],
                                ['jour', 'Dimanche'],
                            ])->get(); ?>
                            @if($seances2->count() > 0)
                                <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                    <ul style="padding-left: 16px;">
                                        @foreach($seances2 as $seance)
                                            <?php
                                                $groupe = App\Models\Groupe::
                                                join('sessions', 'groupes.session_id', 'sessions.id')
                                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                                ->join('enseignants', 'groupes.enseignant_id', 'enseignants.id')
                                                ->where('groupes.id', $seance->groupe_id)
                                                ->whereIn('groupes.id', $tab_groupe_id)
                                                ->whereDate('groupes.from','<=' , $date_selected)
                                                ->select(
                                                    'enseignants.name as enseignant_name',
                                                    'formations.designation as formation_designation',
                                                    'sessions.abreviation as session_designation',
                                                    'groupes.id as groupe_id',
                                                    'groupes.designation as groupe',
                                                    'groupes.capacite as capacite'
                                                )
                                                ->first();
                                            ?>
                                            @if($groupe)
                                                <li>
                                                    @if(!@$groupe_selected){{ $groupe->formation_designation }}-{{ @$groupe->groupe }}<br>@endif
                                                    {{ @$groupe->enseignant_name }}
                                                    ({{ App\Models\Salle::where('id', $seance->salle_id)->first()->designation }})
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                            @else
                            <td></td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>