<template>
  <html>
    <head> </head>

    <body>
      <div id="contenedor">
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

      <div class="bloque1">
        <p>Este es el Bloque 1 fuera del contenedor.</p>
      </div>

      <div class="bloque2">
        <p>Este es el Bloque 2 fuera del contenedor.</p>
      </div>

      <div class="v-container"></div>
      <div class="btn">Generar</div>
      <div class="output"></div>
    </body>
  </html>
</template>

<script>
export default {
  name: "SupportView",
  components: {},
  data() {
    return {
      myArray: [],
      output: "",
    };
  },
  computed: {},
  methods: {},
};
</script>

<style type="text/css">
.clear {
  clear: both;
}

/* Completar aquí la respuesta  */
</style>
