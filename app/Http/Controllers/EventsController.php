<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Objet;
use App\Sub_objet;
use Form;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    private $types = ['corr'=>'Corrective','prev'=>'Preventive','arch'=>'Archivage'];
    
    public function index()
    {
        $entity = auth()->user()->entity;
        return view('events.index',[
            'events' => Event::where('entity',$entity)->latest('date','time')->paginate(10)
            ]);   
        }
        
    public function create()
    {
        $entity = auth()->user()->entity;
        $objets = Objet::where('entity',$entity)->where('type','event')->get();
        return view('events.create',[
            'types' => Form::select('type', $this->types,null, ['class' => 'custom-select']),
            'objets' => $objets,
            'sub_objets' => $objets->get(1)->sub_objets->all()
        ]);
    }

    public function store(Event $event)
    {   
        $request = request(['date','time','type','extra','event']);
        $extra = [
            'sub_objet_id' => request('sub_object'),
            'user_id' => auth()->user()->id,
            'entity' => auth()->user()->entity,
        ];

        $data = array_merge($request,$extra);

        Event::create($data);
        return redirect(route('event.index'));
    }

    public function edit(Event $event)
    {
        $entity = auth()->user()->entity;
        $objets = Objet::where('entity',$entity)->where('type','event')->get();
        $objet_id = $event->sub_objet->objet->id;

        return view('events.edit',[
            'types' => $this->types,
            'event' => $event,
            'objets' => $objets->pluck('name','id'),
            'objet_id' => $objet_id,
            'sub_objets' => $objets->get($objet_id)->sub_objets->pluck('name','id')
        ]);
    }

    public function update(Event $event)
    {
        dd(request()->all());
        $request = request(['date','time','type','extra','event']);
        $extra = [
            'objet_id' => 12,
            'user_id' => 1
        ];
        $event->update(array_merge($request,$extra));
        return redirect('events');
        // return redirect('shifts/'.$shift->id);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back();
    }

    public function ajax($objet_id)
    {
        $sub_objets = Sub_objet::where('objet_id',$objet_id)->get(); 
        return $sub_objets;
    }
}
