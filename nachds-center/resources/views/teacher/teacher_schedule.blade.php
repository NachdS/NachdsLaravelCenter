@extends('teacher.layout_public_teacher_interface')

@section('content_public_teacher_interface')
    <style>
        .app-container.expanded .side-body {
            margin-left: 9%;
        }

        #table_timeline {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 98%;
            margin-left: 25px;
        }

        #table_timeline td,
        #table_timeline th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table_timeline tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table_timeline tr:hover {
            background-color: #ddd;
        }

        #table_timeline th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #2e363e;
            color: white;
        }

    </style>
    <div class="wrapper" style="min-height: 650px;">
        <div class="side-body padding-top">
           <div style="display: flex; float: right;"><label style="padding: 7px;">Groupes</label>
                <select name="groupe_id"  onchange="toggle_form_element(this)" id="groupe_id" class="form-control" required>
                    <option value="">Choisir...</option>
                    @foreach ($groupes as $grp)
                        <option value="{{ $grp->id }}"> {{ @$grp->designation }} </option>
                    @endforeach
                </select>
            </div>
            <div id="emploi">
                <?php if (@$date) {
                    @$date_selected = $date;
                } else {
                    @$date_selected = date('Y-m-d');
                } ?>
                <br>
                @foreach ($groupes as $groupe_selected)
                    <div id="timetable_{{$groupe_selected->id}}" name="timetable" value="{{$groupe_selected->id}}"> 
                    <center>
                        <h4>
                            Emploi
                            <?php
                                $groupe_info = App\Models\Groupe::
                                join('sessions', 'groupes.session_id', 'sessions.id')
                                ->join('formations', 'groupes.formation_id', 'formations.id')
                                ->join('users', 'groupes.enseignant_id', 'users.id')
                                ->where('groupes.id', $groupe_selected->id)
                                ->select(
                                    'users.name as enseignant_name',
                                    'formations.designation as formation_designation',
                                    'sessions.abreviation as session_designation',
                                    'groupes.id as groupe_id',
                                    'groupes.designation as groupe',
                                    'groupes.capacite as capacite',
                                    'groupes.from as from'
                                )
                                ->first();
                            ?>
                            du <font color="#2e85d5">{{ $groupe_info->session_designation }} - {{ $groupe_info->formation_designation }} - {{ $groupe_info->groupe }}</font> à partir du {{ date('d/m/Y', strtotime(@$groupe_info->from)) }}
                        </h4>
                    </center>
                        <table width="100%" border="1" id="table_timeline" style="margin-bottom: 50px;">
                            <thead>
                                <th>Jours</th>
                                <?php $horaires = App\Models\Horaire::orderby('ordre')->where('activer', '1')->get(); ?>
                                @foreach ($horaires as $horaire)
                                    <th><center>{{ $horaire->designation }}</center></th>
                                @endforeach
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding-left: 5px;">Lundi</td>
                                    @foreach ($horaires as $horaire)
                                        <?php
                                            $seances2 = App\Models\Seance::
                                            where('groupe_id', $groupe_selected->id)
                                            ->where('horaire_id', $horaire->id)
                                            ->where('jour', 'Lundi')
                                            ->get();
                                        ?>
                                        @if ($seances2->count() > 0)
                                            <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                                <ul style="padding-left: 16px;">
                                                    @foreach ($seances2 as $seance)
                                                        <?php
                                                            $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                            $salle = @$salle_info->designation;
                                                        ?>
                                                        @if ($groupe_info)
                                                            <li>
                                                                {{ $groupe_info->formation_designation }}-{{ @$groupe_info->groupe }}<br>
                                                                {{ @$groupe->enseignant_name }}<br>
                                                                ({{ App\Models\Salle::find($seance->salle_id)->designation }})
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
                                    @foreach ($horaires as $horaire)
                                        <?php
                                            $seances2 = App\Models\Seance::
                                            where('groupe_id', $groupe_selected->id)
                                            ->where('horaire_id', $horaire->id)
                                            ->where('jour', 'Mardi')
                                            ->get();
                                        ?>
                                        @if ($seances2->count() > 0)
                                            <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                                <ul style="padding-left: 16px;">
                                                    @foreach ($seances2 as $seance)
                                                        <?php
                                                            $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                            $salle = @$salle_info->designation;
                                                        ?>
                                                        @if ($groupe_info)
                                                            <li>
                                                                {{ $groupe_info->formation_designation }}-{{ @$groupe_info->groupe }}<br>
                                                                {{ @$groupe->enseignant_name }}<br>
                                                                ({{ App\Models\Salle::find($seance->salle_id)->designation }})
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
                                    @foreach ($horaires as $horaire)
                                        <?php
                                            $seances2 = App\Models\Seance::
                                            where('groupe_id', $groupe_selected->id)
                                            ->where('horaire_id', $horaire->id)
                                            ->where('jour', 'Mercredi')
                                            ->get();
                                        ?>
                                        @if ($seances2->count() > 0)
                                            <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                                <ul style="padding-left: 16px;">
                                                    @foreach ($seances2 as $seance)
                                                        <?php
                                                            $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                            $salle = @$salle_info->designation;
                                                        ?>
                                                        @if ($groupe_info)
                                                            <li>
                                                                {{ $groupe_info->formation_designation }}-{{ @$groupe_info->groupe }}<br>
                                                                {{ @$groupe->enseignant_name }}<br>
                                                                ({{ App\Models\Salle::find($seance->salle_id)->designation }})
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
                                    @foreach ($horaires as $horaire)
                                        <?php
                                            $seances2 = App\Models\Seance::
                                            where('groupe_id', $groupe_selected->id)
                                            ->where('horaire_id', $horaire->id)
                                            ->where('jour', 'Jeudi')
                                            ->get();
                                        ?>
                                        @if ($seances2->count() > 0)
                                            <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                                <ul style="padding-left: 16px;">
                                                    @foreach ($seances2 as $seance)
                                                        <?php
                                                            $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                            $salle = @$salle_info->designation;
                                                        ?>
                                                        @if ($groupe_info)
                                                            <li>
                                                                {{ $groupe_info->formation_designation }}-{{ @$groupe_info->groupe }}<br>
                                                                {{ @$groupe->enseignant_name }}<br>
                                                                ({{ App\Models\Salle::find($seance->salle_id)->designation }})
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
                                    @foreach ($horaires as $horaire)
                                        <?php
                                            $seances2 = App\Models\Seance::
                                            where('groupe_id', $groupe_selected->id)
                                            ->where('horaire_id', $horaire->id)
                                            ->where('jour', 'Vendredi')
                                            ->get();
                                        ?>
                                        @if ($seances2->count() > 0)
                                            <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                                <ul style="padding-left: 16px;">
                                                    @foreach ($seances2 as $seance)
                                                        <?php
                                                            $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                            $salle = @$salle_info->designation;
                                                        ?>
                                                        @if ($groupe_info)
                                                            <li>
                                                                {{ $groupe_info->formation_designation }}-{{ @$groupe_info->groupe }}<br>
                                                                {{ @$groupe->enseignant_name }}<br>
                                                                ({{ App\Models\Salle::find($seance->salle_id)->designation }})
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
                                    @foreach ($horaires as $horaire)
                                        <?php
                                            $seances2 = App\Models\Seance::
                                            where('groupe_id', $groupe_selected->id)
                                            ->where('horaire_id', $horaire->id)
                                            ->where('jour', 'Samedi')
                                            ->get();
                                        ?>
                                        @if ($seances2->count() > 0)
                                            <td style="vertical-align: baseline;padding: 0;padding-left: 5px;">
                                                <ul style="padding-left: 16px;">
                                                    @foreach ($seances2 as $seance)
                                                        <?php
                                                            $salle_info = App\Models\Salle::where('id', @$seance->salle_id)->first();
                                                            $salle = @$salle_info->designation;
                                                        ?>
                                                        @if ($groupe_info)
                                                            <li>
                                                                {{ $groupe_info->formation_designation }}-{{ @$groupe_info->groupe }}<br>
                                                                {{ @$groupe->enseignant_name }}<br>
                                                                ({{ App\Models\Salle::find($seance->salle_id)->designation }})
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
                @endforeach    
            </div>
        </div>
    </div>
@endsection


