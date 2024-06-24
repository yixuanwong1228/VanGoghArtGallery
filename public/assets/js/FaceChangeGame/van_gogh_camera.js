

/*import image_portrait_01 from '/assets/img/FaceChangeGame/van_gogh_portrait_01.jpg';
import image_portrait_02 from '/assets/img/FaceChangeGame/van_gogh_portrait_02.jpg';
import image_portrait_03 from '/assets/img/FaceChangeGame/van_gogh_portrait_03.jpg';

import image_home_button from '/assets/img/FaceChangeGame/home_button.png';
import image_change_button from '/assets/img/FaceChangeGame/change_button.png';
import image_camera_button from '/assets/img/FaceChangeGame/camera_button.png';*/




import VanGoghFaceFilter from './VanGoghFaceFilter.js';
//import '/assets/css/van_gogh_camera.css' with{type:'css'};


//import { start_pwa_worker } from './pwa_worker.js';
//start_pwa_worker();

/**
 * Painting Options
 */
const PAINTING_OPTIONS = [
    {
        artPainting: '/assets/img/FaceChangeGame/van_gogh_portrait_01.jpg',
        detectState: false // { x: -0.05, y: 0.12, s: 0.25, ry: -0.04926 }
    },
    {
        artPainting: '/assets/img/FaceChangeGame/van_gogh_portrait_02.jpg',
        detectState: false
    },
    {
        artPainting: '/assets/img/FaceChangeGame/van_gogh_portrait_03.jpg',
        detectState: false
    }
];


/**
 * Face Filter Settings
 */
const SETTINGS = {
    // art painting settings:
    artPainting: '/assets/img/FaceChangeGame/van_gogh_portrait_01.jpg', // initial art painting

    //detect state in the initial art painting to avoid search step
    detectState: {x:-0.09803,y:0.44314,s:0.18782,ry:-0.04926},

    nDetectsArtPainting: 25, // number of positive detections to perfectly locate the face in the art painting
    detectArtPaintingThreshold: 0.6,
    artPaintingMaskScale: [1.3, 1.5],
    artPaintingMaskOffset: [0.01, 0.10], //relative. 1-> 100% scale mask width of the image (or height)
    artPaintingCropSmoothEdge: 0.25, //crop smooth edge
    artPaintingHeadForheadY: 0.7, //forhead start when Y>this value. Max: 1
    artPaintingHeadJawY: 0.5, //lower jaw start when Y<this value. Max: 1

    // user crop face and detection settings:
    videoDetectSizePx: 1024,
    faceRenderSizePx: 256,
    zoomFactor: 1.03, //1-> exactly the same zoom than for the art painting
    detectionThreshold: 0.65, //sensibility, between 0 and 1. Less -> more sensitive
    detectionHysteresis: 0.03,

    // mixed settings:
    hueTextureSizePx: 4,  //should be PoT

    // debug flags - should be set to false for standard running:
    debugArtpaintingCrop: false
};

/**
 * Painting Setting
 */
const ARTPAINTING = {
    baseTexture: false,
    potFaceCutTexture: null,
    potFaceCutTextureSizePx: 0,
    hueTexture: null,
    detectCounter: 0,
    image: new Image(),
    canvasMask: false,
    url: -1,
    positionFace: [0, 0],
    scaleFace: [1, 1],
    detectedState: false
};

/**
 * Face Filter declaration
 */
let vanGoghFaceFilter = null;

/**
 * Index of Painting Options
 */
let paintingOptionIdx = 0;

/**
 * Setup buttons in the screen
 */
function setupButtons() {
    document.getElementById('homeButtonImg').src = '/assets/img/FaceChangeGame/home_button.png';
    document.getElementById('changeButtonImg').src = '/assets/img/FaceChangeGame/change_button.png';
    document.getElementById('cameraButtonImg').src = '/assets/img/FaceChangeGame/camera_button.png';
    $('#changeButton').click(function(_event) {
        paintingOptionIdx++;
        paintingOptionIdx = paintingOptionIdx % PAINTING_OPTIONS.length;
        updatePaintingOption()     
    });    
    $('#cameraButton').click(function(_event) {
        vanGoghFaceFilter.saveImage(_event);
    });
}

/**
 * Build Painting with the current option index
 */
function buildPaintingOption() {
    let settings = SETTINGS;
    settings.artPainting = PAINTING_OPTIONS[paintingOptionIdx].artPainting;
    settings.detectState = PAINTING_OPTIONS[paintingOptionIdx].detectState;
    vanGoghFaceFilter = new VanGoghFaceFilter(
        settings
        , ARTPAINTING
        , document.getElementById('artpaintingContainer')
        , 'jeeFaceFilterCanvas'
    );    
}

/**
 * Update Painting with the current option index
 */
function updatePaintingOption() {
    console.log('paintingOptionIdx: ' + paintingOptionIdx);
    let settings = SETTINGS;
    settings.artPainting = PAINTING_OPTIONS[paintingOptionIdx].artPainting;
    settings.detectState = PAINTING_OPTIONS[paintingOptionIdx].detectState;
    vanGoghFaceFilter.change_artPainting(
        PAINTING_OPTIONS[paintingOptionIdx].artPainting
        , PAINTING_OPTIONS[paintingOptionIdx].detectState
    );
}

/**
 * Van Gogh Camera JS
 * <br>Process when jQuery is ready
 * @author  Teki Chan
 * @since   13 May 2020
 */
$( document ).ready(function() {
    console.log('jQuery is ready');
    setupButtons();
    buildPaintingOption()
    vanGoghFaceFilter.main();
});