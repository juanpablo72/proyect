<template>
	<div >
		<div class="container">
			<div class="text-center">
				<h1>Gestionar articulos</h1>
			</div>
      
			<br>
    
<div class="card">
 <div class="row">
   <div class="col-3">
     <input type="text" id="nombre_materia" placeholder=" materia">
   </div>
   <div class="col-3"><input id="docente"  type="text" placeholder="docente"></div>
   <div class="col-3">
    <input id="tipoMateria" type="text" placeholder="tipo de materia"></div>
   <div class="col-2">
    <button @click="guardar();" class="btn btn-primary">+</button>
    </div>
 </div>
</div>


			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre materia</th>
      <th scope="col">docente</th>
      <th scope="col">Tipo de materia</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    
    <tr v-for="dat in datos" :key="dat.id">
      <th scope="row">{{dat.id}}</th>
      <td>{{dat.nombre_materia}}</td>
      <td>{{dat.docente}}</td>
      <td>{{dat.tipoMateria}}</td>
      <td>
        <div class="row">
          <div class="btn-group">
            <button  @click="editar()"class="btn btn-danger">editar</button>
            <button @click="eliminar(dat.id)" class="btn btn-success">Borrar </button>
            
          </div>
         
        </div>
      </td>

    </tr>
    
  </tbody>

</table>
		</div>
	</div>
</template>

<script >
	
export default {
  data() {
        return {
          uni:
          {
            nombre_materia:'',
            docente:'',
            tipoMateria:'',
          },
          modificar:false,
          modalv:0,
          titulomodal:'',
            datos  : [],
        }
    },
  
  methods:
{
  async  lista()
  {
    const repuesta =await axios.get('materias');
     this.datos=repuesta.data;
  },
   async  eliminar(id)
  {
    const repuesta =await axios.delete('materias/'+id);
    this.lista();
  },
  async  editar()
  { 
    this.modificar = true;
    //const repuesta =await axios.delete('articulos/'+id);
    //this.lista();
  },
  abrir()
  {
    this.modalv=1;
    if(this.modificar )
    {
      this.titulomodal='modificar';
    }
      else{ this.titulomodal='Nuevo Articulo';}
  },
  cerrar()
  {
    this.modalv=0;
  }
,
  async guardar()
{
  const repuesta =await axios.post('materias',this.uni);
}
 
}
,
created()
{
this.lista();
}
};
 
</script>

<style>
  .mostrar
  {
    display:list-item;
    opacity:1;
    background:rgba(44,38,75,0.849);
   
  }
	
</style>