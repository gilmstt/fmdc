<main>
    <!-- course-area-start -->
    <div class="course-area course-area-02 pt-130 pb-100">
        <div class="container">
            <div class="section-title-2 text-left mb-20 wow fadeInUp2 animated" data-wow-delay='.1s'>
                <h6><span><i class=" "></i></span> Un extra de corazón</h6>
            </div>
            <div class="blog__content">
                <a class="tag">Última actualización de contenidos noviembre, 2024.</a>
            </div>
            <div class="row grid" id="cardContainer"></div>
        </div>
    </div>
    <!-- Paginación -->
    <nav>
    <ul class="pagination justify-content-center" id="pagination-container">
        <!-- Los botones de paginación se generarán dinámicamente -->
    </ul>
</nav>
</main>

<script>
    const data = [
        { title: "SEDENTARISMO", href: "Dashboard/sedentarismo", description: "<br>Hablar de sedentarismo, es hablar de un estilo de vida en el cual se carece de una adecuada cantidad de actividad física. Se estima que alrededor de un 60% de la población mundial podría tener una insuficiente actividad física en el día a día, convirtiéndolo en uno de los principales factores de riesgo para padecer una enfermedad cardiovascular y otros padecimientos crónicos como la diabetes o la hipertensión." },
        { title: "Diabetes (factores de riesgo, síntomas)", href: "Dashboard/diabetes", description: "<br>La diabetes es una enfermedad metabólica en la que el cuerpo presenta un inadecuado manejo de las azúcares en la sangre debido a una insuficiente cantidad de insulina o la incapacidad del cuerpo de responder a esta misma de forma adecuada. Es importante remarcar que la diabetes es una de las enfermedades más comunes en la actualidad y también una de las que más complicaciones presenta." },
        { title: "Dislipidemia", href: "Dashboard/dislipidemia", description: "<br>Existen múltiples factores de riesgo para el desarrollo de enfermedad cardiovascular. Algunos de los más importantes son la hipertensión arterial, el colesterol y los triglicéridos elevados, la diabetes, el tabaquismo, la obesidad y el sobrepeso, entre otros. Por ello, es importante que sepas que el desbalance en las grasas que circulan habitualmente en la sangre, como el colesterol y los triglicéridos, pueden afectar nuestra..." },
        { title: "Metas de tratamiento de la hipertensión arterial", href: "Dashboard/metas_tratamiento", description: "<br>Metas de tratamiento de la hipertensión arterial. Cuando una persona vive con hipertensión arterial debe conocer las metas de control a las que se quiere llegar con el tratamiento que recibe. ¿Cuáles son las metas de tratamiento de la hipertensión? Las metas a las que se busca llegar durante el tratamiento de la hipertensión habitualmente son las mismas en todos los pacientes (metas estándar). Sin embargo; en algunos casos..." },
        { title: "Diabetes: metas del tratamiento.", href: "Dashboard/diabetes_tratamiento", description: "<br>Diabetes: metas del tratamiento. Uno de los principales factores de riesgo para el desarrollo de enfermedad cardiovascular es la diabetes; ya que cuando el paciente no tiene un buen control de la enfermedad aumenta la posibilidad de sufrir complicaciones. Existen diferentes estrategias que se pueden adoptar. Tratamiento no farmacológico. Los cambios en el estilo de vida deben adoptarse por todos los pacientes como base ..." },
        { title: "angina de pecho", href: "Dashboard/angina_pecho_2", description: "<br>Uno de los principales síntomas de enfermedad cardiovascular es el dolor en el pecho que se conoce como angina. En el presente artículo abordaremos las principales características para identificar este malestar y los pasos a seguir cuando se sospecha de la misma. ¿Qué es la angina de pecho? Se conoce como angina al síntoma caracterizado por dolor, incomodidad u opresión en el pecho que se desencadena habitualmente con la ..." },
        { title: "Hábitos para mantener una salud cardiovascular adecuada", href: "Dashboard/salud_cardiovascular", description: "<br>La salud cardiovascular es un aspecto fundamental para el bienestar personal, ya que las enfermedades del corazón son una de las principales causas de muerte a nivel mundial. Según la Organización Mundial de la Salud, las enfermedades cardiovasculares son responsables de aproximadamente 17.9 millones de muertes al año globalmente, lo que representa el 31% de todas las muertes en el mundo." },
        { title: "Salud cardiovascular: hábitos nutricionales recomendables", href: "Dashboard/habitos_nutricionales", description: "<br>La salud cardiovascular es esencial en la vida de todos. Para tener un corazón sano, es necesario adoptar un estilo de vida saludable. En el presente artículo nos enfocaremos en un aspecto fundamental de la salud cardiovascular: la nutrición. Adoptar elecciones alimentarias saludables puede tener un impacto significativo en la salud de nuestro corazón y del sistema circulatorio. A continuación, se presentan algunas recomendaciones nutricionales..." },
        { title: "Actividad física: Beneficios en la salud cardiovascular", href: "Dashboard/actividad_fisica", description: "<br>La actividad física es uno de los pilares fundamentales para mantener y mejorar la salud cardiovascular. El ejercicio regular ayuda a reducir el riesgo de enfermedades cardíacas, mejorar la circulación, disminuir los niveles de colesterol, y controlar la presión arterial. Además, fortalece el corazón y los vasos sanguíneos, haciendo que el sistema cardiovascular sea más eficiente. ¿Qué beneficios tiene la actividad física en..." },
        { title: "El índice de Masa Corporal y su Relación con la Salud Cardiovascular.", href: "Dashboard/masa_corporal", description: "<br>El índice de masa corporal (IMC) es una herramienta ampliamente utilizada para evaluar la cantidad de tejido corporal en relación con la altura y el peso de una persona. En palabras sencillas el valor de IMC representa una relación entre el peso de una persona con respecto a su altura. Este índice se calcula mediante la fórmula: IMC = peso (kg) / altura² (m²). Por ejemplo, si una persona pesa 70 kg y mide 1.75 m, su IMC sería 22.86." },
        { title: "Insuficiencia Cardíaca ¿Qué es y cuáles son los principales síntomas?", href: "Dashboard/insuficiencia_cardiaca_sintomas", description: "<br>La insuficiencia cardíaca es una condición médica en la cual el corazón no puede bombear suficiente sangre para satisfacer las necesidades del cuerpo. Esto no implica que el corazón haya dejado de funcionar por completo, sino que es menos eficiente de lo normal. La disminución en la capacidad del corazón para bombear sangre afecta varios sistemas del cuerpo y puede ser una condición seria y crónica. Es importante remarcar que la..." },
    ];

    const cardsPerPage = 6; // Número de tarjetas por página
    let currentPage = 1; // Página inicial

    function displayCards(page) {
        const startIndex = (page - 1) * cardsPerPage;
        const endIndex = startIndex + cardsPerPage;

        const cardContainer = document.getElementById("cardContainer");
        cardContainer.innerHTML = ""; // Limpiar contenido previo

        data.slice(startIndex, endIndex).forEach(item => {
            const cardHTML = `
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item">
                    <div class="cases grey-bg2 mb-30">
                        <div class="cases__box pos-rel">
                            <div class="cases__box--img">
                                <p style="text-align: justify;">${item.description}</p>
                            </div>
                            <ul class="cases__tag white-bg " style="margin-top: 27px;">
                                <li>
                                    <div class="cases--author d-flex align-items-center">
                                        <h4 class="semi-02-title ml-15">${item.title}</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cases__content ">
                            <li>
                                <a class="theme_btn theme_btn_bg d-btn" href="${base_url + item.href}"><span><i class="fas fa-heart"></i></span> SABER MÁS</a>
                            </li>
                        </div>
                    </div>
                </div>`;
            cardContainer.innerHTML += cardHTML;
        });
    }

    function createPagination() {
        const paginationContainer = document.getElementById("pagination-container");
        paginationContainer.innerHTML = ""; // Limpiar contenido previo

        const totalPages = Math.ceil(data.length / cardsPerPage);

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement("li");
            button.className = `page-item ${i === currentPage ? "active" : ""}`;
            button.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            button.addEventListener("click", () => {
                currentPage = i;
                displayCards(currentPage);
                createPagination();
            });
            paginationContainer.appendChild(button);
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        displayCards(currentPage);
        createPagination();
    });
</script>