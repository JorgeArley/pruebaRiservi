<template>
  <html>
    <head> </head>

    <body>
      <div id="contenedor">
        <div class="clear">
          <div class="bloque1">
            <p>Este es el Bloque 1 dentro del contenedor.</p>
          </div>
          <div class="bloque2">
            <p>
              Este es el contenido del Bloque 2 dentro del contenedor, este
              contiene mas texto, por eso debe ser mas largo.
            </p>
          </div>
        </div>
      </div>

      <div class="bloque1">
        <p>Este es el Bloque 1 fuera del contenedor.</p>
      </div>

      <div class="bloque2">
        <p>Este es el Bloque 2 fuera del contenedor.</p>
      </div>

      <div class="v-container">
        <div
          v-for="(item, index) in myarray"
          :key="item.id"
          :style="{
            backgroundColor: index % 2 !== 0 ? '#e6e6e6' : '',
            visibility: index % 2 === 0 ? 'hidden' : 'visible',
          }"
        >
          Nombre: {{ item.name }}, Roles: {{ item.roles.join(", ") }}
        </div>
      </div>
      <div class="btn" @click="generateOutput">Generar</div>
      <div class="output">{{ output }}</div>
    </body>
  </html>
</template>

<script>
export default {
  name: "SupportView",
  data() {
    return {
      myarray: [
        { id: 1, name: "Will Smith", roles: [1, 3] },
        { id: 2, name: "Ronnie Coleman", roles: [2, 4, 6] },
        { id: 3, name: "Michio Kaku", roles: [1, 3, 5] },
        { id: 4, name: "Bryan Adams", roles: [2, 6, 8] },
        { id: 5, name: "Lorena", roles: [1, 5] },
      ],
      output: "",
    };
  },
  computed: {
    total() {
      return this.myarray.length;
    },
  },
  methods: {
    generateOutput() {
      this.output = `El total de listado es: ${this.total}`;
    },
  },
};
</script>

<style type="text/css">
.clear {
  clear: both;
}

/* Completar aquí la respuesta  */
body {
  text-align: center;
}

p {
  padding: 10px;
}

#contenedor {
  margin: 0 auto;
  width: 600px;
  padding: 10px;
  padding-bottom: 10px;
  margin-bottom: 10px;
  border: 1px dotted gray;
}

#contenedor > .clear > .bloque1 {
  margin: 5px;
  width: 100px;
  margin-top: 70px;
  font-style: italic;
}

#contenedor > .clear > .bloque2 {
  margin: 5px;
  width: 100px;
}

.bloque1 {
  background-color: red;
  color: white;
}

.bloque2 {
  background-color: yellow;
  color: black;
  font-weight: bold;
}

.output {
  margin-top: 10px;
  font-weight: bold;
}
</style>
